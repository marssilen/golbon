<br>
<div class="w3-white container center" >
<div class="w3-row">

<div class="" align="center"><!--left images-->
<a class="btn btn-info w3-margin-16" href="<?= URL ?>cp/add_item">افزودن کالا</a>
<form action="<?= URL.'cp/search_item/'?>" method="POST">
<input name="search" type="text" placeholder="آیدی،نام،تگ">
<button type="submit" class="btn btn-info w3-margin-16">جستجو</button>
</form>
<!--start -->

<div ng-app="myApp" ng-controller="myCtrl">

<div class="row w3-margin-16">

<div id='{{x.id}}' class="col-sm-3 col-xs-6 w3-padding-16" ng-repeat="x in names">

<div class="w3-round  w3-card-2 w3-center mycard w3-white" style="padding:8px" >
<div align="right" class="">id:{{x.id}}</div>
<div class="w3-white" style="padding-bottom:0px;padding-left:10px;padding-right:10px">
<img src="<?= URL ?>public/upload/{{x.card_image}}" style="width:100%;">
<p align="right" class="font" style="padding:0px">
{{x.name}}
</p>
<a class="btn btn-info" href="<?= URL ?>cp/delete_item/{{x.id}}">Delete</a>
<a class="btn btn-success" href="<?= URL ?>edit_item/{{x.id}}">Edit</a>
</div>


</div>

</div>


</div>

</div>

<script>
var app = angular.module('myApp', []);

app.controller('myCtrl', function($scope) {
    $scope.names = <?php echo json_encode($data['data']); ?>;
});
</script>

<!--end -->

<div align="center">
<?= $data['pview'] ?>

</div>



</div>
</div>
</div>
