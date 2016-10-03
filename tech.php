<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta content="IE=edge" http-equiv="X-UA-Compatible" />
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta content="" name="description" />
	<link href="favicon.ico" rel="shortcut icon" />
	<title>YACoin - Your Alternative Currency - Home</title>
	<!-- Bootstrap core CSS -->
	<link href="dist/css/bootstrap.min.css" rel="stylesheet" /><!-- Custom styles for this template -->
	<link href="justified-nav.css" rel="stylesheet" />
	<link href="yacoin.css" rel="stylesheet" /><!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]--><!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --><!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">


<?php 
include_once("includes/nav.php"); 
?>

<div class="container">
<div class="page-header">
<h1 id="timeline">About YACoin</h1>
</div>

<p>YACoin (code: YAC, Symbol: Ɏ) introduces multiple innovations including a variable key derivation function, and as of December 2013 has an estimated market cap of over $2,000,000 USD.</p>

<p>YACoin inherits much of its design from Novacoin, Peercoin and Bitcoin.<br />
It retains these two features from Peercoin:</p>

<ul>
	<li>Hybrid Proof of Work/Proof of Stake.</li>
	<li>Fixed Transaction Fees (0.01 YAC per kilobyte) to prevent Blockchain bloat/spam attacks.</li>
</ul>
YAC also includes one minute target block times and a variable block reward rate based on network difficulty.<br />
<br />
The reward can be computed as:<br />
<br />
<img align="left" src="dist/img/reward.png" /><br />
&nbsp;
<p></p>

<p></p>

<p><br />
YACoin differs from other cryptocurrencies in its usage of these newer technologies:</p>

<ul>
	<li>Proof of Work key derivation function known as Scrypt.</li>
	<li>The N parameter of Scrypt(N, 1, 1) increases over time and 256 bits of its output are used by the YACoin protocol.</li>
	<li>SHA-3/Keccak-512 as a hashing used in Scrypt</li>
	<li>ChaCha20/8 stream cypher used as a mixing function in Scrypt</li>
</ul>

<p></p>

<p>Other cryptocurrencies implementing Scrypt use a fixed Scrypt(1024, 1, 1) with SHA-256 and Salsa20 as hashing and mixing functions. As these use only 128 kB of memory per hash, they can effectively be implemented on parallel architectures like GPU and FPGA devices.<br />
<br />
YACoin, with its current value of N=65536, uses 8 MB of memory (no commercially-available GPU has a compute unit local memory of this size), thus most data ends up in the much slower shared global memory.<br />
As such, YACoin is one of the very few alt coins that can be mined efficiently on a CPU. <b>This means that almost any computer (new or old) can be used to mine YACoins!</b></p>
<br />
<b>Economics:</b>

<p>YACoin inherits a dynamic inflationary/deflationary behavior from Peercoin. The block rewards for Proof-of-Work mining are inversely proportional to the amount of computational power used, so the rewards will decrease when the currency is valued more.<br />
Proof-of-stake minters are also rewarded with interest on the coins they own at a rate of 5% per year. However, there is a fixed transaction fee that destroys at least 0.01 YAC every time coins are transferred.<br />
This feature will gradually deflate the currency in proportion to its velocity. The cumulative effect of creating and destroying the currency is theoretically intended to stabilize the growth of its supply, while keeping it adaptable to demand and usage.</p>
<b>Major Markets:</b>

<p>YACoin can be traded for other currencies through various online exchanges including <a href="https://bter.com/trade/yac_btc" target="_blank">Bter</a> and <a href="https://yobit.net/en/trade/YAC/BTC" target="_blank">YoBit</a>.</p>
</div>
<!-- Site footer -->
<?php 
include_once("includes/footer.php"); 
?>

</div>
<!-- /container --><!-- Bootstrap core JavaScript
    ================================================== --><!-- Placed at the end of the document so the pages load faster --></body>
</html>
