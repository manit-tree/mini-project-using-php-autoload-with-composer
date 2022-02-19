# Use Autoload with Composer

I try to keep what i learn on GitHub so one day when i need to recall, i khow it is here. And this is my mini php project to learn how to use PHP's Autoload with Composer.

# How it Works 

1. create composer.json file + map namespace with folder that you keep your classes
2. at the command prompt, type "composer update" and Composer will generate autoload script for you.
3. create Bird.php (with namespace "Animals") and put in folder "./lib/Animals/"
3. create Bird.php (with namespace "Artists") and put in folder "./lib/Artists/"
4. create "index.php" to test if everything works correctly. At the first line of this file, type require 'vendor/autoload.php' then on the next line try instantiate and use the Classes we created

# Conclusion

1. You can use Composer to generate autoload script for you.
2. Once you understand how it works, it will be very convinient.
3. Keeping Classes in this way (classified by namespace and folder) keep things organized.