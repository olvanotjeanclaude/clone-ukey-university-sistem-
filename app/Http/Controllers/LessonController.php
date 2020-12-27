<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\Students;
use App\StudentsSchoolInformation;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessons = Lesson::all();

        return response()->json($lessons);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lesson = Lesson::findOrFail($id);
        return response()->json($lesson);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getStudents($id_lesson)
    {

        $data = [];
        $i = 0;
        $students = Lesson::find($id_lesson)->students()->get();
        $lessons = Lesson::with(
            "studentsSchoolInformation.students"
        )->where("id", $id_lesson)->get();

        return response()->json($lessons);
    }

    public function getLessonContent($id_lesson)
    {

        $courseContent = Lesson::findOrFail($id_lesson)->lessonContent()->get();

        return response()->json($courseContent);
    }
}