# Data Mining Method Calculation On PHP

[![Total Downloads](https://img.shields.io/packagist/dt/fanboykun/datamining.svg?style=flat-square)](https://packagist.org/packages/fanboykun/datamining)

This package provide calculation of datamining Algorithm, Current Algorithm that can be used is KMeans, C45 on working.

## Installation

You can install the package via composer:

```bash
composer require fanboykun/datamining
```

## Usage
Use the class
```php
use Fanboykun\Datamining\Datamining
```
### In this example, we going to use KMeans

example of the data go give
```php
$points = Study::all()->map(function ($study, $k) {
        return [
            'key' => $study->student_id,
            'val' => [
            $study->matematika,
            $study->fisika,
            $study->kimia,
            $study->biologi,
            $study->sejarah,
            $study->akuntansi,
            $study->sosiologi,
            $study->geografi,
            ],
        ];
    })->toArray();
```
use one of the available method, init the custructor
```php
// example, we use KMeans, init with desired space (data example above)
$space = (new Datamining)->initKMeans(8)
```

add all point into space
```php
// give the array of the data as the point to insert into space as the first parameter
// give the key of the points(data to calculate) as the second parameter
// give to value of the data to calculate as the third parameter
 $space->addAllPointToSpace($points, 'key', 'val');
```

execute the calulation
```php
// the required arguments are :

// the number of the cluster you want to set
// int $numberOfCluster

// the initialization method (set to 3 for set the first centroid manually)
// $initMethod = 1

// give the index of the array of the points you want set as the first centroid
// $selectedPoints = []
$dataset = $space->solveWithIterationCallback(2, 3, [0,1]);
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email irfanramadhan1812@gmail.com instead of using the issue tracker.

## Credits

-   [fanboykun](https://github.com/fanboykun)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information
