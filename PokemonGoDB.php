<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/menu.css" />
	<title>ポケモンGO種族値データベース</title>
</head>

<body>

  <div id="menu_frame">
    <iframe src="menu.html" name="top" scrolling="auto" width="100%" height="46" frameborder="0" border="0">フレーム対応ブラウザで閲覧ください。</iframe>
  </div>

	<?php
	// データベースに接続する

	$pdo = new PDO("mysql:host=localhost;dbname=pdb;charset=utf8", "root", "");
	// print_r($_POST);

  ?>
	<h1>ポケモンGO種族値データベース</h1>

	<?php
	// データベースからデータを取得する
	$sql = "SELECT * FROM PokemonDB ORDER BY  DEPT_NO, USER_ID DESC;";
	$stmt = $pdo->prepare($sql);
	$stmt -> execute();
	?>
	<table>
		<tr>
			<th>ポケモン名</th>
			<th></th>
      <th>攻撃力</th>
			<th>守備力</th>
			<th>HP</th>
			<th>合計</th>
			<th></th>
		</tr>
		<?php
		// 取得したデータを表示する
		while ($row = $stmt -> fetch(PDO::FETCH_ASSOC)) { ?>
			<tr>
				<td><?= $row["name"] ?></td>
			header('Content-Type: image/png');
        <td>readfile(<?php= $row["image"] ?>);</td>
				<td><?= $row["attack"] ?></td>
				<td><?= $row["defense"] ?></td>
				<td><?= $row["hp"] ?></td>
				<td><?= $row["total"] ?></td>
				<td>
					</form>
				</td>
			</tr>
		<?php } ?>
	</table>
</body>

</html>
