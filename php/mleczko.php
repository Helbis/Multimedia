<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Galeria zdjęć Mleczko</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="manifest" href="../favicon/site.webmanifest">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="./css/mleczko_main.css">
</head>

<body>
    <h1>Galeria zdjęć Mleczko</h1>
    <div class="center">
		<?php
		<table>
			<tbody>
			require('config.php');

			for ($i=1; $i <= $w; $i++) {
				echo "\t<tr>\n";
				for ($j=1; $j <= $k; $j++) {
					$order = ($i * $k + $j);
					echo
					'<td tabindex=\"' . $order . "\">\n
                    \t\t    <a href=\"./html/mleczko_strony/" . $mini[order-1] . ".html\">\n
                    \t\t\t        <img src=\"./sources/mleczko/MINI/" . $mini[order-1] . ".gif\" alt=\"" . $order . ">\n
                    \t\t    </a>\n
                    </td>\n"
				}
				echo "\t</tr>\n";
			}
		?>

				<tr>
					<td colspan="4">
						<a href="../index.html">
							<img src="./sources/mleczko/strzalka.gif" alt="◀️">
						</a>
					</td>
				</tr>
            </tbody>
        </table>
    </div>
</body>

</html>
