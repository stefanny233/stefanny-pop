<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $name = "Stefanny";
        $tglLahir = Carbon::create(2006, 10, 23);
        $tglHarusWisuda = Carbon::create(2028, 8, 30);
        $currentSemester = 4;
        $futureGoal = "Orang kaya";

        $myAge = $tglLahir->age;

        $timeToStudyLeft = now()->diffInDays($tglHarusWisuda, false);

        $hobbies = ["Membaca", "Ngoding", "Main Musik", "Bermain Game","Nonton Film"
        ];

        $motivasi = $currentSemester < 3
            ? "Masih Awal, Kejar TAK"
            : "Jangan main-main, kurang-kurangi main game!";

        return view('pegawai.index', [
            'name' => $name,
            'my_age' => $myAge,
            'hobbies' => $hobbies,
            'tgl_harus_wisuda' => $tglHarusWisuda->toDateString(),
            'time_to_study_left' => $timeToStudyLeft,
            'current_semester' => $currentSemester,
            'motivasi' => $motivasi,
            'future_goal' => $futureGoal
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
