<div id="footer-menu" class="footer-menu-4-icons">
  <!-- <a href="pages-list.html"><i class="fa fa-heart"></i><span>Pages</span></a> -->
  <?php
        $status_menu = 0;
  ?>
  <a href="{{url("admin")}}" <?=($status_menu == 1)? 'class="active-menu"' : "" ?>><i class="fa fa-database"></i><span>Data Pertanayaan</span></a>
  <a href="{{url("admin/data-chat-bot")}}" <?=($status_menu == 2)? 'class="active-menu"' : "" ?>><i class="fa fa-envelope"></i><span>Data Chat Bot</span></a>
  <a href="{{url("admin/user")}}" <?=($status_menu == 3)? 'class="active-menu"' : "" ?>><i class="fa fa-user"></i><span>Data User</span></a>
  <a href="{{url("admin/out")}}" <?=($status_menu == 4)? 'class="active-menu"' : "" ?>><i class="fa fa-power-off"></i><span>Log Out</span></a>
  <div class="clear"></div>
</div>