<?php
	session_start();
	require_once "$_SERVER[DOCUMENT_ROOT]/services/user.service.php";
    $user = $_SESSION['user'];
?>
<header class="flex h-20 bg-blue-200 items-center px-10 justify-between">
    <div class="flex gap-5 items-center">
	    <?php if(isLogin()) { ?>
            <img src="<?php echo "/public/users/$user[userID]/$user[avatar]" ?>" alt="avatar" class="rounded-full h-16 w-16">
            <h3 class="font-bold text-2xl"><?php echo $_SESSION['user']['login'] ?></h3>
	    <?php } ?>
    </div>
    <div class="flex gap-5">
	    <?php if(isLogin()) { ?>
            <a href="#">Профиль</a>
            <a href="#">Друзья</a>
	    <?php } ?>
    </div>
    <div>
	    <?php if(isLogin()) { ?>
          <a href="/controllers/logout.controller.php" class="bg-sky-700 p-3 text-white">LOGOUT</a>
	    <?php } else { ?>
            <a href="/controllers/login.controller.php" class="bg-sky-700 p-3 text-white">LOGIN</a>
            <a href="/controllers/reg.controller.php" class="bg-sky-700 p-3 text-white">REGISTRATION</a>
	    <?php } ?>
    </div>
</header>