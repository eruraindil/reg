reg
===

Online system which manages events, public registration, employee assignment, and resources.

Installs as a bundle to a larger syfony2 installation. In your main routes file, specify
    stikmen_reg:
        resource: "@StikmenRegBundle/Resources/config/routing.yml"
        prefix:   /changeToWherePathShouldBe

And add `new Stikmen\RegBundle\StikmenRegBundle(),` to the registerBundles bundles array in your AppKernel file.
