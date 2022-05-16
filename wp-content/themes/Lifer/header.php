<?php
    //setcookie("challenge", $challenge, time() + (10 * 365 * 24 * 60 * 60), "/"); //create the cookie, the time here is empty because I don't know how to do it

    /**
     * Set cookie (first with global value otherwise we need to find a special value for a special user)
     * Check if cookies are set otherwise give them the oppurtunity to accept cookies again with the same value
     * Store the counter in this cookie for the challenges in a $var
     * Keep the $var counter saved to this user so they come back later (use cookie $var? and test)
     * ---
     * When user comes back:
     * Maybe cookies stay bcs of the 10 years duration time() + (10 * 365 * 24 * 60 * 60) otherwise accept cookies
     * The counter should be the same that is saved to this user
     */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Keywords">
    <meta name="author" content="Lifer">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/main.css">
    <title><?php wp_title(); ?> - <?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
    </head>