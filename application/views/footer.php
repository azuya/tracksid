	<!-- Perubahan script coding untuk bisa menampilkan footer dalam bentuk tampilan bootstrap (AdminLTE)  -->
			<footer class="main-footer">
				<div class="pull-right hidden-xs">
				  	<b><a href="http://opensid.info">www.opensid.info</a></b>
				</div>
		    <!-- Default to the left -->
		    <strong>Copyright &copy; 2018 <a href="https://github.com/OpenSID/OpenSID">OpenSID</a>.</strong> All rights reserved.
			</footer>
		</div>

	<script type="text/javascript">
		$(document).ready(function() {
	    //Enable sidebar dinamic menu
	    dinamicMenu();
	  });
	    /* DinamicMenu()
	     * dinamic activate menu
	     */
	    function dinamicMenu() {
	        var url = window.location;
	        url = url.toString();

	        // Kasus wilayah tidak bisa aktif -- keanehan
	        if (url.includes('wilayah')) { $('#wilayah').addClass('active') };

	        // Will only work if string in href matches with location
	        $('.sidebar-menu li a[href="' + url + '"]').addClass('active');
	        $('.treeview-menu li a[href="' + url + '"]').parent().addClass('active');
	        // Will also work for relative and absolute hrefs
	        $('.treeview-menu li a').filter(function() {
	            return this.href == url;
	        }).parent().parent().parent().addClass('active');
	    };
	</script>



	</body>
</html>

