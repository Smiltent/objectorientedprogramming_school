
class Example_Kotlin(name: String) {
    public val variable: String = ""

    init {
        this.variable = name
    }

    fun example(name: String) {
        this.variable = name + "_lol"
    }
}