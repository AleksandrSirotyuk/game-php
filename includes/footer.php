<footer>
		<div class="container_12">
			<div class="grid_12" id="columns_footer">
				<table width="100%">
					<tr>
						<td id="footer_nav">
							<div id="heading_footer1">Навигация:</div>
							<ul>
								<li><a href="#">Главная</a></li>
								<li><a href="#">Информация</a></li>
								<li><a href="#">Рейтинг игроков</a></li>
								<li><a href="#">Обратная связь</a></li>
							</ul>
						</td>
						<td id="additional_information">
								<div id="heading_footer2">Дополнительная информация:</div><br/>
							<span class="color_text"><a target="_blank" href="#">Скачать версию для PC</a></span><br/>
							<span class="color_text"><a target="_blank" href="#">Скачать версию для Android</a></span>
						</td>
						<td id="developers_information">
							<div id="heading_footer3">Разработчики сайта:</div><br/>
							<span class="color_text">
								Front-end: Александр Сиротюк<br/>
								Back-end: Денис Ураканов
							</span>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</footer>
	<div class="avgrund-cover"></div>
	<script type="text/javascript" src="libs/jquery-3.3.1.min.js"></script>
	<script src="libs/OwlCarousel2-2.2.1/dist/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/common.js"></script>
	<script type="text/javascript" src="js/avgrund.js"></script>
	<script type="text/javascript" src="js/headhesive.js"></script>
    <script>
      // Set options
      var options = {
          offset: '#showHere',
          offsetSide: 'top',
          classes: {
              clone:   'banner--clone',
              stick:   'banner--stick',
              unstick: 'banner--unstick'
          }
      };

      // Initialise with options
      var banner = new Headhesive('.banner', options);

      // Headhesive destroy
      // banner.destroy();
    </script>
</body>
</html>
