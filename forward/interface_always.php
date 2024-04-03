<link rel="stylesheet" type="text/css" href="<?php echo $General->arr_general['site'] ?>app/modules/module_page_aimka/assets/css/1.css?v=1">
	
	<div class="modal" id="aimka_infa">
            <div class="modal-content aimka-sized" style="padding: 10px; min-width: 21rem;">
                <span class="header_modal_new">
                    <svg viewBox="0 0 576 512">
                        <path d="M519.442 288.651c-41.519 0-59.5 31.593-82.058 31.593C377.409 320.244 432 144 432 144s-196.288 80-196.288-3.297c0-35.827 36.288-46.25 36.288-85.985C272 19.216 243.885 0 210.539 0c-34.654 0-66.366 18.891-66.366 56.346 0 41.364 31.711 59.277 31.711 81.75C175.885 207.719 0 166.758 0 166.758v333.237s178.635 41.047 178.635-28.662c0-22.473-40-40.107-40-81.471 0-37.456 29.25-56.346 63.577-56.346 33.673 0 61.788 19.216 61.788 54.717 0 39.735-36.288 50.158-36.288 85.985 0 60.803 129.675 25.73 181.23 25.73 0 0-34.725-120.101 25.827-120.101 35.962 0 46.423 36.152 86.308 36.152C556.712 416 576 387.99 576 354.443c0-34.199-18.962-65.792-56.558-65.792z"></path>
                    </svg>
                    <?php echo $Translate->get_translate_module_phrase('module_page_aimka', '_Title')?>
                </span>
                <span class="close-button">
                    <svg viewBox="0 0 320 512">
                        <path d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z" />
                    </svg>
                </span>
                <div class="content_modal_block" style="max-height: none;">
					<div class="aimka-background">
						<div class="aimka-alert">The game doesn't work<br>on small screens</div>
						<canvas id="aim"></canvas>
					</div>
                </div>
				<div class="palette_jumping" style="margin-top: 10px; margin-bottom: 0px; -webkit-user-drag: none; user-select: none;">
                        <img class="palette_img" src="/app/modules/module_page_aimka/assets/img/dev.png" alt="">
                        <div class="palette_text">
                            <span>Winners train, losers complain</span>
                            <span> Frontend & Backend:
							<div style="color: #fff;">2manbl4</div>
							</span>
                        </div>
                </div>
            </div>
        </div>
		
<script defer src="<?php echo $General->arr_general['site'] ?>app/modules/module_page_aimka/assets/js/1.js?v=1"></script>