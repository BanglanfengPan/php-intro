# CLASSES
1. Encaplusation:
Building of data and behaviours, that are similar, together
ex: Bike class can has color, year, model number, clean and ride functions
2. Abstraction:
Access to something complex without knowing the inner workings
we will just call clean() method and bike is clean
However, beneath the hood clean function is doing lots of steps to clean the bike (fill the bucket)
3. Inheritence:
create hierarchical relationships between items
Student, Mechanic, Doctor are all People (they below to the people class)
they all have fucntions walk() sleep() run(), variables: height, name, age
But Mechanic class already inherits generic People class and species new specific methods
4. Polymorphism
Multiple functions of the same name doing something specific
Gardnener works differently from Doctor
we can add a function of work to each of our people based on the type of person (which work they do)
many forms of the same work() method