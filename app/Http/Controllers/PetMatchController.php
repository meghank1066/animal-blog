<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetMatchController extends Controller
{
    public function showQuizForm()
    {
        return view('layouts.feature.quiz');
    }


    public function match(Request $request)
    {

        
        // Define pet suggestions with their characteristics
        $petSuggestions = [
            'Dog' => [
                'activity' => 'active',
                'allergies' => 'no',
                'time' => ['moderate', 'a lot'],
                'size' => 'medium',
                'special_needs' => 'no',
                'activity_level' => 'active',
                'space_available' => 'medium_space',
                'other_pets' => 'yes',
                'image' => 'dog.png',
            ],
            'Cat' => [
                'activity' => 'calm',
                'allergies' => 'no',
                'time' => ['moderate', 'a lot'],
                'size' => 'medium',
                'special_needs' => 'no',
                'activity_level' => 'moderate',
                'space_available' => 'medium_space',
                'other_pets' => 'yes',
                'image' => 'kitty.png',
            ],
            'Rabbit' => [
                'activity' => 'calm',
                'allergies' => 'no',
                'time' => ['moderate', 'a lot'],
                'size' => 'small',
                'special_needs' => 'no',
                'activity_level' => 'sedentary',
                'space_available' => 'medium_space',
                'other_pets' => 'yes',
                'image' => 'rabbit.png',
            ],
            'Fish' => [
                'activity' => 'calm',
                'allergies' => 'yes',
                'time' => ['little', 'moderate', 'a lot'],
                'size' => 'small',
                'special_needs' => 'no',
                'activity_level' => 'sedentary',
                'space_available' => 'small_space',
                'other_pets' => 'no',
                'image' => 'fish.png',
            ],
            'Hamster' => [
                'activity' => 'active',
                'allergies' => 'no',
                'time' => ['little'],
                'size' => 'small',
                'special_needs' => 'no',
                'activity_level' => 'sedentary',
                'space_available' => 'small_space',
                'other_pets' => 'no',
                'image' => 'hamster.png',
            ]
        ];

      // Get user's preferences from the form
    $activity = $request->input('activity');
    $allergies = $request->input('allergies');
    $time = $request->input('time');

    // Find pet suggestions based on user's preferences
    $matchedPets = collect($petSuggestions)->filter(function ($characteristics) use ($activity, $allergies, $time) {
        return $activity === $characteristics['activity'] &&
            $allergies === $characteristics['allergies'] &&
            in_array($time, $characteristics['time']);
    })->keys()->toArray();

    // Return view with matched pets
    return view('layouts.feature.result', ['matchedPets' => $matchedPets, 'petSuggestions' => $petSuggestions]);
}
}



//CREATE TABLE results (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(255) NOT NULL,
//     email VARCHAR(255) NOT NULL,
//     pet VARCHAR(255) NOT NULL,
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//     updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// );
