<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function upload(Request $request)
    {
        // Validate the uploaded file
       

        

        // Store the uploaded file on the server
        $path = $request->file->store('csv');

        
        
        // Open and read the contents of the uploaded file

        $file = fopen(storage_path('app/' . $path), 'r');
        $header = true;

    if (!$file) {
        return response()->json(['error' => 'Error file try again'], 500);
    }

      while (($line = fgetcsv($file,"0",";")) !== false) {
    if ($header) {
        $header = false;
        continue;
    }
    $id = (int) $line[0];

           $inserted= DB::table('products')->insert([
                'id' => $id,
                'name' => $line[1],
                'value' => $line[2]
            ]);

            if (!$inserted) {
                return response()->json(['error' => 'Error inserting data to BD'], 500);
            }
        }

        // Close the file
        fclose($file);

        return  'The CSV file was uploaded successfully';
        
    }
}
