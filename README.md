This Symfony2 Bundle adds the possibility to render strings instead of files with the Symfony2 native Twig templating engine.

    git remote add upstream https://github.com/LaKrue/TwigstringBundle.git

1. install on your project:

    git submodule add git://github.com/LaKrue/TwigstringBundle.git src/LK/TwigstringBundle

2. set configuration on config.yml (as top level entry):

    lk_twigstring: ~

3. set autoload.php

    $loader->registerNamespaces(array(
         //...//
         'LK'          => __DIR__.'/../src',
         'LaKrue'          => __DIR__.'/../src',
         //...//
    ));

4. set AppKernel.php

    $bundles = array(
        //...//
        new LK\TwigtringBundle\LKTwigstringBundle(),
        //...//
    );

5. use LK/TwigstringBundle:

    // set example parameter
    $vars = array('var'=>'x');

    // get renderstring service
    $tpl_engine = $this->get('twigstring');

    // render example string
    $vars['test'] = 'u ' . $tpl_engine->render('v {{ var }} {% if var is defined %} y {% endif %} z{% for i in 1..5 %} {{ i }}{% endfor %}', $vars);

or use the short way:
    // set example parameter
    $vars = array('var'=>'x');

    // render example string
    $vars['test'] = 'u ' . $this->get('twigstring')->render('v {{ var }} {% if var is defined %} y {% endif %} z{% for i in 1..5 %} {{ i }}{% endfor %}', $vars);


Authors:
LarsK, cordoval