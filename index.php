<!DOCTYPE html>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
    </head>
<body ng-app="time-picker" ng-controller="controller">
<form >
  <label for="appt">Select a time:</label>
  <input type="time"  name="time" ng-model="time">
  <input type="submit" value="Submit" ng-click="insert()">
</form>
<script src="app/controllers/time_controller.js">
</script>
</body>
</html>
