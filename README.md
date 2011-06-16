This Symfony2 Bundle adds the possibility to render strings instead of files with the Symfony2 native Twig templating engine.

   What we have done
   =================
    * We have changed the loader class to your own, pass it as an argument to the Twig Environment,
      and that Environment is passed as argument to the Twig Engine

    git remote add upstream https://github.com/LaKrue/RenderStringBundle.git

1. install on your project:

    git submodule add git://github.com/LaKrue/RenderStringBundle.git src/LaKrue/RenderStringBundle

2. set configuration on config.yml (as top level entry):

    renderstring:

3. set autoload.php

    $loader->registerNamespaces(array(
         //...//
         'LaKrue'          => __DIR__.'/../src',
         //...//
    ));

4. set AppKernel.php

    $bundles = array(
        //...//
        new LaKrue\RenderStringBundle\LaKrueRenderStringBundle(),
        //...//
    );

5. use RenderStringBundle:

    // set example parameter
    $vars = array('var'=>'x');

    // get renderstring service
    $tpl_engine = $this->get('renderstring');

    // render example string
    $vars['test'] = 'u ' . $tpl_engine->render('v {{ var }} {% if var is defined %} y {% endif %} z{% for i in 1..5 %} {{ i }}{% endfor %}', $vars);

    or

    $vars['test'] = 'u ' . $this->get('renderstring')->render('v {{ var }} {% if var is defined %} y {% endif %} z{% for i in 1..5 %} {{ i }}{% endfor %}', $vars);

Authors:

LarsK
cordoval
