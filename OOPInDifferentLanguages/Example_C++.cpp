
#include <string>

using namespace std;

class Example_CPP {
private:
    string variable;

public:
    Example_CPP(const string& name) : variable(name) {}

    void example(const string& name) {
        variable = name + "_lol";
    }
}
