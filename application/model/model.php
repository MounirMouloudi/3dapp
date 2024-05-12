<?php
class Model
{
    public $dbhandle;

    public function __construct()
    {
        $dsn = 'sqlite:./db/3dapp.db';

        try {
            $this->dbhandle = new PDO(
                $dsn,
                'mounir',
                'password',
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => false,
                )
            );
        } catch (PDOEXception $e) {
            echo "I'm sorry, Mounir. I'm afraid I can't connect to the database!";
            print new Exception($e->getMessage());
        }

    }

    public function dbCreateTable()
    {
        try {
            $this->dbhandle->exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, x3dModelTitle TEXT, modelSubtitle TEXT, modelDescription TEXT)");
            return "Model_3D table is successfully created";
        } catch (PDOEXception $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }

    public function dbInsertData()
    {
        try {
            $this->dbhandle->exec(
                "INSERT INTO Model_3D (Id, x3dModelTitle, modelSubtitle, modelDescription) 
                VALUES (1, 'X3D Coka Cola Model', 'Coca Cola', 'It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special!'); " .
                "INSERT INTO Model_3D (Id, x3dModelTitle, modelSubtitle, modelDescription) 
                VALUES (2, 'X3D Coke Zero Model', 'Coke Zero', 'The drink was introduced in 2005 as Coca-Cola Zero as a new no-calorie cola. In 2017, the formula was modified and the name updated, a change which led to some backlash. Another formula change occurred in the United Kingdom in July 2021, in the United States in August 2021, and in Canada in September 2021.'); " .
                "INSERT INTO Model_3D (Id, x3dModelTitle, modelSubtitle, modelDescription) 
                VALUES (3, 'X3D Sprite Model', 'Sprite', 'First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the worlds leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.'); "
            );
            return "X3D model data inserted successfully inside db";
        } catch (PDOEXception $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }

    public function dbGetData()
    {
        try {
            // Prepare a statement to get all records from the Model_3D table
            $sql = 'SELECT * FROM Model_3D';
            // Use PDO query() to query the database with the prepared SQL statement
            $stmt = $this->dbhandle->query($sql);
            // Set up an array to return the results to the view
            $result = null;
            // Set up a variable to index each row of the array
            $i = 0;
            // Use PDO fetch() to retrieve the results from the database using a while loop
            // Use a while loop to loop through the rows	
            while ($data = $stmt->fetch()) {
                // Don't worry about this, it's just a simple test to check we can output a value from the database in a while loop
                // echo '</br>' . $data['x3dModelTitle'];
                // Write the database conetnts to the results array for sending back to the view
                $result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
                $result[$i]['modelSubtitle'] = $data['modelSubtitle'];
                $result[$i]['modelDescription'] = $data['modelDescription'];
                //increment the row index
                $i++;
            }
        } catch (PDOEXception $e) {
            print new Exception($e->getMessage());
        }
        // Close the database connection
        $this->dbhandle = NULL;
        // Send the response back to the view
        return $result;
    }
    public function model3D_info()
    {
        // Simulate the model's data
        return array(
            'model_1' => 'Coke Can 3D Image 1',
            'image3D_1' => 'coke_1',

            'model_2' => 'Coke Can 3D Image 2',
            'image3D_2' => 'coke_2',

            'model_3' => 'Sprite Bottle 3D Image 1',
            'image3D_3' => 'sprite_1',

            'model_4' => 'Sprite Bottle 3D Image 2',
            'image3D_4' => 'sprite_2',

            'model_5' => 'Dr Pepper Cup 3D Image 1',
            'image3D_5' => 'pepper_1',

            'model_6' => 'Dr Pepper Cup 3D Image 2',
            'image3D_6' => 'pepper_2'
        );
    }
}
?>