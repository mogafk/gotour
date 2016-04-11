<?php
	/***********************************
	 * Created by Devorans.com
	 * Author: HukpoFuJl
	 * File: test.php
	 * Project: TOUR
	 * Date: 13.11.2015
	 * Feedback: support@devorans.com
	 ************************************/ ?>

<div id="sub-header" style="background:#000"><h3>TEST</h3></div>

<div class="container">
	<div id="new-filters">

		<div>

			<span class="hidden-xs">Группа чекбоксов</span>

			<div class="x-input-chk-group">
				<sub>Опции</sub>

				<span class="x-group">
					<label class="x-input-check">
						<input type="checkbox" checked>
						<i><i class="fa fa-check"></i></i>
						<span>Первый чекбокс</span>
					</label>

					<label class="x-input-check">
						<input type="checkbox" checked>
						<i><i class="fa fa-check"></i></i>
						<span>Второй чекбокс</span>
					</label>

					<label class="x-input-check">
						<input type="checkbox" checked>
						<i><i class="fa fa-check"></i></i>
						<span>Третий чекбокс</span>
					</label>

					<label class="x-input-check">
						<input type="checkbox" checked>
						<i><i class="fa fa-check"></i></i>
						<span>Четвертый чекбокс</span>
					</label>
				</span>


			</div>

		</div>

		<div>

			<label class="x-input-plus-minus">
				<span class="x-minus">—</span>
				<span class="x-plus">+</span>
				<input type="number" step="1" min="1" max="27" value="2" readonly>
			</label>

		</div>

		<div>

			<label class="x-input-dd">
				<input type="hidden" placeholder="Выпадающий список">
				<sub></sub>
			<span>
				<i data-value="1">Екатеринбург</i>
				<i data-value="2">Москва</i>
				<i data-value="3">Санкт Петербург</i>
				<i data-value="4">Владивосток</i>
			</span>
			</label>

		</div>

		<div>

			<span class="hidden-xs">Текстовый выпадающий список</span>

			<label class="x-input-dd x-text">
				<input type="hidden" placeholder="Выбрать город">
				<sub data-before="Из: "></sub>
			<span>
				<i data-value="1">Екатеринбург</i>
				<i data-value="2">Москва</i>
				<i data-value="3">Санкт Петербург</i>
				<i data-value="4">Владивосток</i>
			</span>
			</label>

		</div>


		<pre id="log"></pre>
		<button id="x">X</button>

	</div>
</div>
<script>
	ready(function() {





		function log(data){
			$('#log').append(data+"\r\n");
		}
	});
</script>