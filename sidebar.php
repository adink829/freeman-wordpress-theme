<div class="menu" onMouseOver=handleShowMenu() onMouseOut=handleHideMenu() OnClick=handleMenuClick()>
	<button class="menuButton">
		<svg class="hamburgerMenu" viewBox="0 0 100 80" xmlns="http://www.w3.org/2000/svg">
			<rect width="100" height="15" rx="8"></rect>
			<rect y="30" width="100" height="15" rx="8"></rect>
			<rect y="60" width="100" height="15" rx="8"></rect>
		</svg>
		</button>
	<nav class="menuDropdown" style="display: none;" onMouseOver=handleShowMenu() onMouseOut=handleHideMenu()>
		<a class="menuItem" href="/">Home</a>
		<a class="menuItem" href="/voice">Voice</a>
		<a class="menuItem" href="/video">Video</a>
		<a class="menuItem" href="/about">About</a>
		<a class="menuItem" href="/contact">Contact</a>
	</nav>
</div>