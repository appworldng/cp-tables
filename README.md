# cp-tables

A simple shortcode to enable you display custom posts in a table like fashion.

## Shortcode

Shortcode can be embedded into your posts and pages like so:

```
[cptables]
```

## Customize

Shortcode can also be customized in various ways to output heading, custom fields, post types and so on.

```
[cptables cpt="employee" heading="Name, Gender, Age, Occupation" body="employee_name, employee_gender, employee_age, employee_occupation"]
```

```
[cptables cpt="employee" rows="100" search="yes"]
```
