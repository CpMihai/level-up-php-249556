<style>
	body {
		vertical-align: middle;
	}

	.coin {
		margin: 0 auto;
		background: #999999;
		color: #333333;
		border-radius: 50%;
		padding: 90px;
		text-align: center;
		font-size: 2rem;
		font-weight: bold;
		width: 60px;
	}
</style>

<?php

function flip()
{
	return (0 == rand(0, 1)) ? "head" : "tail";
}

?>

<div class="coin">
	<div><?php echo flip(); ?></div>
</div>