<?php
$title = '员工管理';
require_once(dirname(dirname(__FILE__))."/site/head.php");

echo <<<END
      <h5>员工管理</h5>
      <!-- Main component for a primary marketing message or call to action -->
      <div class="row row-offcanvas row-offcanvas-right">
		<div class="col-md-9">
        <div class="jumbotron">
	      <table class="table table-bordered">

			   <thead>
			      <tr>
			         <th>名称</th>
			         <th>城市</th>
			         <th>密码</th>
			      </tr>
			   </thead>
			   <tbody>
			      <tr>
			         <td>Tanmay</td>
			         <td>Bangalore</td>
			         <td>560001</td>
			      </tr>
			      <tr>
			         <td>Sachin</td>
			         <td>Mumbai</td>
			         <td>400003</td>
			      </tr>
			      <tr>
			         <td>Uma</td>
			         <td>Pune</td>
			         <td>411027</td>
			      </tr>
			   </tbody>
			</table>
	      </div><!--col-md-4-->
		</div><!--col-md-9 jumbotron-->
		
		
		 <div class="col-md-3 sidebar-offcanvas">
			<div class="list-group">
	            <a href="#" class="list-group-item active">员工管理</a>
	            <a href="index.php?ctr=user&act=creat" class="list-group-item">新建员工</a>
	
           </div>
         </div><!--/.sidebar-offcanvas-->
		
		</div>
		
      </div>
END;
require_once(dirname(dirname(__FILE__))."/site/foot.php");
?>