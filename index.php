<?php
$currentForm = isset($_GET['form']) && $_GET['form'] === 'register' ? 'Register' : 'Login';
$formToSwitchTo = $currentForm === 'Login' ? 'Register' : 'Login';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css" type="text/css">
    <title>Morgenster - <?php echo $currentForm; ?></title>
</head>
<body>
    <div class="page">
        <div class="mainTitle">Morgenster</div>
        <div class="container">
            <div class="left">
                <div class="currentForm"><?php echo $currentForm; ?></div>
                <div class="formToSwitchTo">
                    <a href="?form=<?php echo strtolower($formToSwitchTo); ?>">
                        <?php echo $formToSwitchTo; ?>
                    </a>
                </div>
                <div class="eula">
                    <?php if ($currentForm === 'Login'): ?>
                        If you have been registered, go ahead and login. If not, click Register to create an account.
                    <?php else: ?>
                        Already have an account? Click Login to return to the login page.
                    <?php endif; ?>
                </div>
            </div>
            <div class="right">
                <svg viewBox="0 0 320 300">
                <defs>
                    <linearGradient
                            inkscape:collect="always"
                            id="linearGradient"
                            x1="13"
                            y1="193.49992"
                            x2="307"
                            y2="193.49992"
                            gradientUnits="userSpaceOnUse">
                    <stop
                            style="stop-color:#ff00ff;"
                            offset="0"
                            id="stop876" />
                    <stop
                            style="stop-color:#ff0000;"
                            offset="1"
                            id="stop878" />
                    </linearGradient>
                </defs>
                <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
                </svg>
                <form action="submit.php" method="POST" class="form">
                    <label for="email">Username</label>
                    <input type="email" id="email" name="email" required>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                    <input type="hidden" name="form_type" value="<?php echo strtolower($currentForm); ?>">
                    <input type="submit" id="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>

    <script src="./scripts/animation.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
</body>
</html>
