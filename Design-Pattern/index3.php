<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factory</title>
</head>
<body>
    <!-- Factory Pattern -->

    <?php
    
        // class Profile
        // {
        //     private $name;
        //     private $phone;

        //     public function __construct($name, $phone)
        //     {
        //         $this->name = $name;
        //         $this->phone = $phone;
        //     }
        // }


        class ProfileFactory
        {
            private $data;

            public function __construct($data)
            {
                $this->data = $data;
            }

            public function create()
            {
                $result = [];

                foreach($this->data as $data) {
                    $name = $data['name'] ?? "Unknown";
                    $phone = $data['phone'] ?? "N/A";
                    $result[] = new Profile($name, $phone);
                }

                return $result;
            }
        }

        $pf = new ProfileFactory($data);
        $profiles = $pf->create();
    ?>
</body>
</html>