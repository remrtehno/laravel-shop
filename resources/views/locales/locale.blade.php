


<style>
	.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}

</style>

<div class="dropdown">
  <span><i class="fas fa-globe-asia"></i> @lang('home.lang') </span>
  <div class="dropdown-content">
  <a href="<?= route('setlocale', ['lang' => 'en']) ?>">English</a>
<a href="<?= route('setlocale', ['lang' => 'ru']) ?>">Русский</a>
<a href="<?= route('setlocale', ['lang' => 'uz']) ?>">Uzb</a>
  </div>
</div>
