Magento Composer Autoload
=========================

Hack to make the magento autoloader composer vendor dir aware.

It's very likely you want to manage 3rd party libraries, or perhaps even Magento Extensions using composer. This can be difficult because composer uses its own class loading mechanism, typically creating a <application_root>/vendor/autoload.php file to initialise its environment. 

This extension overrides Magento's default autoloader _Varien_Autoload_ to load this file before initialising Magento so you can make use of composer managed code within Magento. 

If you have already overridden this file, or have installed another extension that has, this extension will not work for you.

For example, this extension is not compatible with [Aoe_ClassPathCache](https://github.com/fbrnc/Aoe_ClassPathCache).

Any comments or questions can be directed to me on twitter [@ajbonner](http://twitter.com/ajbonner), or via email [aaron@aaronbonner.io](mailto:aaron@aaronbonner.io).
