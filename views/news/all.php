<?php
/**
 * Created by PhpStorm.
 * User: Razo4
 * Date: 05.07.2016
 * Time: 21:59
 */

foreach ($this->data as $item) : ?>
	<h2> <a href="../../index.php?ctrl=News&action=one&id=<?php echo $item->id?>"> <?php echo $item->title ?> </a></h2>
	<p>
		<?php echo $item->text ?>
	</p>
<?php endforeach ?>