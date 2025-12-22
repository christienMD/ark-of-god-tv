<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LiveController extends Controller
{
    /**
     * Get all sermons data
     */
    private function getSermons()
    {
        return [
            1 => [
                'id' => 1,
                'title' => 'Start a New Way of Living',
                'slug' => 'start-a-new-way-of-living',
                'image' => 'sermon1.jpeg',
                'youtube_id' => 'U8iRoEotkU0',
                'preacher' => 'Apostle John Chi',
                'category' => 'Kingdom Living & Transformation',
                'date' => 'Aug 03',
                'time' => '7:00 am - 11:00 am',
                'day' => '03',
                'month' => 'aug',
            ],
            2 => [
                'id' => 2,
                'title' => 'Overcoming Life\'s Challenges',
                'slug' => 'overcoming-lifes-challenges',
                'image' => 'sermon2.jpeg',
                'youtube_id' => 'U8iRoEotkU0',
                'preacher' => 'Apostle John Chi',
                'category' => 'Divine Strength & Victory',
                'date' => 'Aug 03',
                'time' => '7:00 am - 11:00 am',
                'day' => '03',
                'month' => 'aug',
            ],
            3 => [
                'id' => 3,
                'title' => 'Hope in Times of Trouble',
                'slug' => 'hope-in-times-of-trouble',
                'image' => 'sermon3.jpeg',
                'youtube_id' => 'U8iRoEotkU0',
                'preacher' => 'Apostle John Chi',
                'category' => 'Faith & Divine Encounters',
                'date' => 'Aug 03',
                'time' => '7:00 am - 11:00 am',
                'day' => '03',
                'month' => 'aug',
            ],
            4 => [
                'id' => 4,
                'title' => 'Citizens of Heaven: Knowing Who We Are in Christ',
                'slug' => 'citizens-of-heaven',
                'image' => 'sermon5.jpeg',
                'youtube_id' => 'U8iRoEotkU0',
                'preacher' => 'Apostle John Chi',
                'category' => 'Identity & Kingdom',
                'date' => 'Dec 04',
                'time' => '10:00 am - 12:00 pm',
                'day' => '04',
                'month' => 'dec',
            ],
            5 => [
                'id' => 5,
                'title' => 'The Anointing: Walking in Divine Empowerment',
                'slug' => 'the-anointing',
                'image' => 'sermon6.jpeg',
                'youtube_id' => 'U8iRoEotkU0',
                'preacher' => 'Apostle John Chi',
                'category' => 'Power & Authority',
                'date' => 'Dec 01',
                'time' => '10:00 am - 12:00 pm',
                'day' => '01',
                'month' => 'dec',
            ],
            6 => [
                'id' => 6,
                'title' => 'Taking the Light: Your Mission as a Believer',
                'slug' => 'taking-the-light',
                'image' => 'sermon7.jpeg',
                'youtube_id' => 'U8iRoEotkU0',
                'preacher' => 'Apostle John Chi',
                'category' => 'Mission & Purpose',
                'date' => 'Nov 28',
                'time' => '10:00 am - 12:00 pm',
                'day' => '28',
                'month' => 'nov',
            ],
            7 => [
                'id' => 7,
                'title' => 'The Power of Revelation: Encounters That Transform',
                'slug' => 'power-of-revelation',
                'image' => 'sermon5.jpeg',
                'youtube_id' => 'U8iRoEotkU0',
                'preacher' => 'Apostle John Chi',
                'category' => 'Revelation & Truth',
                'date' => 'Nov 25',
                'time' => '10:00 am - 12:00 pm',
                'day' => '25',
                'month' => 'nov',
            ],
            8 => [
                'id' => 8,
                'title' => 'Grace That Overwhelms: Living in Divine Favor',
                'slug' => 'grace-that-overwhelms',
                'image' => 'sermon6.jpeg',
                'youtube_id' => 'U8iRoEotkU0',
                'preacher' => 'Apostle John Chi',
                'category' => 'Grace & Favor',
                'date' => 'Nov 22',
                'time' => '10:00 am - 12:00 pm',
                'day' => '22',
                'month' => 'nov',
            ],
            9 => [
                'id' => 9,
                'title' => 'Building the Ark: God\'s Covenant with His People',
                'slug' => 'building-the-ark',
                'image' => 'sermon7.jpeg',
                'youtube_id' => 'U8iRoEotkU0',
                'preacher' => 'Apostle John Chi',
                'category' => 'Covenant & Promise',
                'date' => 'Nov 19',
                'time' => '10:00 am - 12:00 pm',
                'day' => '19',
                'month' => 'nov',
            ],
        ];
    }

    public function index()
    {
        $sermons = $this->getSermons();
        // Get sermons 4-9 for the live page (6 sermons)
        $pageSermons = array_slice($sermons, 3, 6, true);
        
        return view('live.index', compact('sermons', 'pageSermons'));
    }

    public function show($id)
    {
        $sermons = $this->getSermons();
        
        // Find the sermon by ID
        $sermon = $sermons[$id] ?? $sermons[1]; // Default to first sermon if not found
        
        // Get related sermons (exclude current)
        $relatedSermons = array_filter($sermons, function($s) use ($id) {
            return $s['id'] != $id;
        });
        $relatedSermons = array_slice($relatedSermons, 0, 3); // Get first 3 related
        
        return view('live.show', compact('sermon', 'relatedSermons'));
    }
}
