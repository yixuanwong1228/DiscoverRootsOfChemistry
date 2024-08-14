<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Quiz;
use App\Models\Selection;
use App\Models\Question;
use App\Models\user_quiz;
use App\Models\user_question;

class QuizController extends Controller
{
    public function showQuiz()
    {
        $quizzes = Quiz::all();
        
        $studentID = Auth::id();

        $completedQuizzes = Quiz::join('user_quizzes', 'quizzes.id', '=', 'user_quizzes.quizID')
        ->where('user_quizzes.studentID', $studentID)
        ->get();

        return view('Quiz.showQuiz', compact('quizzes', 'completedQuizzes'));
    }

    public function start_quiz($id)
    {
        // Get the currently authenticated student ID
        $studentID = Auth::id();
        $quizID = $id;
        $quiz=Quiz::find($quizID);

        // Insert a new record into the user_quizzes table
        $userQuiz = new user_quiz();
        $userQuiz->studentID = $studentID;
        $userQuiz->quizID = $quizID;
        $userQuiz->save();

        // Retrieve all questions related to the quiz
        $questions = Question::where('quizID', $quizID)->get();

        // Insert records into the student_questions table for each question
        foreach ($questions as $question) {
            $userQuestion = new user_question();
            $userQuestion->studentID = $studentID;
            $userQuestion->questionID = $question->id;
            $userQuestion->save();
        }

        // Redirect to the view to start the quiz
        return view('Quiz.start_quiz', compact('quiz'));
    }

    public function getQuestions($quizID)
    {
        $studentID = Auth::id();
        
        // Fetch questions for the given quizID
        $questions = Question::where('quizID', $quizID)->get();

        // Fetch selections and check if the student has selected any
        $questionsWithSelections = $questions->map(function ($question) use ($studentID) {
            $selections = Selection::where('questionID', $question->id)->get();
            $studentSelection = user_question::where('studentID', $studentID)
                                                ->where('questionID', $question->id)
                                                ->first();

            // Map selections and mark the selected one
            $selections = $selections->map(function ($selection) use ($studentSelection) {
                $selection->isSelected = $studentSelection && $studentSelection->selectionID == $selection->id;
                return $selection;
            });

            $question->selections = $selections;
            return $question;
        });

        return response()->json($questionsWithSelections);
    }

    public function saveSelection(Request $request)
    {
        $studentID = Auth::id();
        $questionID = $request->input('questionID');
        $selectionID = $request->input('selectionID');
        $quizID = $request->input('quizID'); // Retrieve the quizID if needed

        // Find the student question record
        $studentQuestion = user_question::where('studentID', $studentID)
                            ->where('questionID', $questionID)
                            ->first();

        // Update the selection ID
        if ($studentQuestion) {
            $studentQuestion->selectionID = $selectionID;
            $studentQuestion->save();
        }

        return response()->json(['status' => 'success']);
    }

    public function submitQuiz(Request $request, $id)
    {
        // Process submitted quiz answers
        $answers = $request->input('answers');

        // Validate and process the answers
        foreach ($answers as $questionIndex => $answer) {
            // Perform operations on each answer (e.g., save to database, calculate score)
            // For now, we just output the answers
            echo "Question $questionIndex: Selected answer $answer<br>";
        }

        // Redirect back or to a different page after processing
        return redirect()->route('showQuiz')->with('status', 'Quiz submitted successfully!');
    }

    public function displayMarks($quizID)
    {
        // Get the authenticated student's ID
        $studentID = Auth::id();
        $quiz=Quiz::find($quizID);
        $quizName=$quiz->name;
        // Fetch all questions for the quiz
        $questions = Question::where('quizID', $quizID)->get();

        $correctAnswers = 0;
        $totalQuestions = count($questions);

        // Loop through each question to calculate the number of correct answers
        foreach ($questions as $question) {
            // Fetch the student's selected answer for the question
            $studentSelection = user_question::where('studentID', $studentID)
                ->where('questionID', $question->id)
                ->first();

            if ($studentSelection) {
                // Fetch the correct selection for the question
                $correctSelection = Selection::where('questionID', $question->id)
                    ->where('isTrue', 1)
                    ->first();

                // Compare the student's selected answer with the correct answer
                if ($studentSelection->selectionID == $correctSelection->id) {
                    $correctAnswers++;
                }
            }
        }

        // Calculate the marks based on correct answers
        $marks = ($correctAnswers / $totalQuestions) * 100;

        // Update the student's marks in the student_quizzes table
        $studentQuiz = user_quiz::where('studentID', $studentID)
            ->where('quizID', $quizID)
            ->first();

        if ($studentQuiz) {
            $studentQuiz->marks = $marks;
            $studentQuiz->save();
        }

        // Return the results to the view
        return view('Quiz.display_marks', compact('quizName','marks','quizID'));
    }

    public function previewQuiz($quizID) {
        $quiz = Quiz::find($quizID);
        $studentID = Auth::id();
        $studentQuiz = user_quiz::where('quizID', $quizID)
                                   ->where('studentID', $studentID)
                                   ->first(); // Assuming there's only one record for each student quiz
        $marks = $studentQuiz ? $studentQuiz->marks : 0; // Default to 0 if no record found
        return view('Quiz.preview', compact('quiz', 'marks'));
    }

    public function completed(){
        $studentID = Auth::id();
        $completedQuizzes = Quiz::join('user_quizzes', 'quizzes.id', '=', 'user_quizzes.quizID')
        ->where('user_quizzes.studentID', $studentID)
        ->orderBy('user_quizzes.updated_at', 'desc')
        ->select('quizzes.*', 'user_quizzes.updated_at as quiz_updated_at', 'user_quizzes.marks')
        ->get();
        return view('Quiz.completed', compact('completedQuizzes'));
    }
}
