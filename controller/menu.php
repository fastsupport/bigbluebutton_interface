<<<<<<< HEAD
<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'home.php'){echo 'active'; }else { echo ''; } ?>"><a href='home.php'>Home <span class='sr-only'>(current)</span></a></li>
<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'list_rooms.php'){echo 'active'; }else { echo ''; } ?>"><a href='list_rooms.php'>Listar Salas <span class='sr-only'>(current)</span></a></li>
<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'create_rooms.php'){echo 'active'; }else { echo ''; } ?>"><a href='create_rooms.php'>Criar Sala de Aula</a></li> 
=======
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'dashboard.php'){echo 'active'; }else { echo ''; } ?>">
                    <a href='dashboard.php'><i class="fa fa-fw fa-dashboard"></i> <?= $lang['MENU_DASHBOARD']?></a>
                </li>
                <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'list_rooms.php' || basename($_SERVER['SCRIPT_NAME']) == 'create_rooms.php'  ){echo 'active'; }else { echo ''; } ?>">
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-desktop"></i> <?= $lang['MENU_ROOMS'] ?> <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="demo" class="collapse">
                        <li>
                            <a href="list_rooms.php"><i class="fa fa-fw fa-list"></i> <?= $lang['MENU_ROOMS_LIST'] ?></a>
                        </li>
                        <li>
                            <a href="create_rooms.php"><i class="fa fa-fw fa-plus-circle"></i> <?= $lang['MENU_ROOMS_CREATE'] ?></a>
                        </li>
                    </ul>
                </li>
                <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'server.php'){echo 'active'; }else { echo ''; } ?>">
                    <a href='server.php'><i class="fa fa-fw fa-server"></i> <?= $lang['MENU_SERVER'] ?></a>
                </li>
            </ul>
        </div>
>>>>>>> 757ead1e9621a6ae79399c33b008fc2789da516f
