<?php
                include ("menu.php");
                echo "<h3 class='header'>Cheet Sheets</h3>";
                    // Get the directory path
                    $dir = 'C:\wamp\www\StudyHub\project\Materials\CheetSheets';
                    // Check if the directory exists
                    if (is_dir($dir)) {
                        // Get all the files in the directory
                        $files = scandir($dir);
                        // Remove the . and .. directories from the list
                        unset($files[0], $files[1]);
                        // Check if the directory is empty
                            if (count($files) == 0) {
                                // Print a statement
                                echo "<button type='button' class='btn study'>File Not Exist</button></a><br>";
                            } 
                            else{
                                // List out the files in the directory
                                foreach ($files as $file) {
                                  $filebutton=pathinfo($file, PATHINFO_FILENAME);
                                echo "<a href='C:/wamp/www/StudyHub/project/Materials/CheetSheets/$file'><button type='button' class='btn sheet'>$filebutton</button></a><br>";
                            }
                    }
                    } 
                    else{
                    // The directory does not exist
                        echo "<button type='button' class='btn study'>Not Exist</button></a><br>";
                    }
                ?>