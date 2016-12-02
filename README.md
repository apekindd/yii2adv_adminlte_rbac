Yii 2 Advanced with AdminLTE and rbac
===============================
```
composer self-update
composer update
```

```
php init
```

```
yii migrate
```

rbac
```
php yii migrate --migrationPath=@yii/rbac/migrations/
```
How to use
```
Yii::$app->user->can('nameOfPermission')
```