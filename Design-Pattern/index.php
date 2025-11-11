<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design Patterns</title>
</head>
<body>
    <!-- SOLID -->

    <!-- Singleton -->
     
    <?php
    
        class Setting
        {
            static $setting = null;
            public $dark = 0;

            protected function __construct()
            {
                //
            }

            static function create()
            {
                if(!static::$setting) 
                {
                    static::$setting = new static;
                }

                return static::$setting;
            }
        }  

        $setting1 = Setting::create();
        $setting1->dark = 1;

        $setting2 = Setting::create();
        echo $setting2->dark; // 1

    ?>
</body>
</html>