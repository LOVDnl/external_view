# External LOVD data viewer
This is the `External LOVD data viewer`. This package allows any PHP website to
 show live data from a remote LOVD3 instance.
The data views are fully functional, allowing searching and sorting.
The data views are defined in the settings file, after which they can be called
 with different search terms.

## Example usage
To use this viewer, simply include the `inc-init.php` file, and use the `$_LOVD`
 object to request the data view. See also example.php.

```
// Load the external view app.
require 'inc-init.php';

// Call for the full data view of the IVD gene using transcript ID 64, searching
//  for data owners with a name containing "Fokkema", and hiding some unused
//  columns, including the one we searched on.
$_LOVD->viewVariants('IVD', 64, array(
    'search' => array(
        'owned_by_' => 'Fokkema',
    ),
    'cols_to_skip' => array(
        'VariantOnGenome/ISCN' => 1,
        'VariantOnGenome/Segregation' => 1,
        'VariantOnGenome/Methylation' => 1,
        'owned_by_' => 1,
    ),
));
```
