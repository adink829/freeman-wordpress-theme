<script>
const handleShowMenu = () => {
	let menu = document.querySelector('.menuDropdown');
        menu.style.display = "flex"
}
const handleHideMenu = () => {
	let menu = document.querySelector('.menuDropdown');
		menu.style.display = "none"
};
</script>

<div class="menu" onMouseOver=handleShowMenu() onMouseOut=handleHideMenu()>
	<button class="menuLine">
	</button>
		<nav class="menuDropdown" style="display: none;" onMouseOver=handleShowMenu() onMouseOut=handleHideMenu()>
			<a class="menuItem" href="#">Home</a>
			<a class="menuItem" href="/voice">Voice</a>
			<a class="menuItem" href="/video">Video</a>
			<a class="menuItem" href="/about">About</a>
			<a class="menuItem" href="/contact">Contact</a>
		</nav>
</div>
