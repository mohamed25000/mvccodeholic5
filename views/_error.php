<?php
/**
 * @var $exception Exception
 */

/**
 * @var $this \app\core\View
 */

$this->title = "error";
?>


<h1><?php echo $exception->getCode() ?> - <?php echo $exception->getMessage() ?></h1>