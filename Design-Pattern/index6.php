<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Provider</title>
</head>
<body>
    <?php
    
        interface Log
        {
            public function write();
        }

        class Text implements Log
        {
            public function write()
            {
                echo "Saving to text file";
            }
        }

        class Memory implements Log
        {
            public function write()
            {
                echo "Saving on memory";
            }
        }

        class Services
        {
            public $container = [];

            public function register($name, $class)
            {
                $this->container[$name] = $class;
            }
        }

        $services = new Services;
        $services->register("text", Text::class);
        $services->register("memory", Memory::class);
    ?>
</body>
</html>