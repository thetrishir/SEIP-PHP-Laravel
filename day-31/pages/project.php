<section class="py-5  bg-dark">
    <div class="row">
        <div class="col-8 offset-2">
            <h1 class="text-white text-center">Calculator</h1>
            <form class="p-5 bg-primary rounded" method="POST" action="route.php?page=project">
                <div class="form-group">
                    <label for="exampleInputEmail1">1st Number</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter 1st Number" name="firstNumber">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">2nd Number</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter 2nd Number" name="lastNumber">
                    <br>
                </div>
                <!-- <select name="operator">
                    <option type="submit" value="Sum" name="Sum">Sum</option>
                    <option value="saab">sub</option>
                    <option value="mercedes">Mul</option>
                    <option value="audi">Div</option>
                </select> -->
                <div class="text-center">
                    <button type="submit" class="btn btn-danger" name="series">Series</button>
                    <button type="submit" class="btn btn-danger" name="summation">Summation</button>
                    <button type="submit" class="btn btn-danger" name="subtraction">Subtraction</button>
                    <button type="submit" class="btn btn-danger" name="multiplication">Multiplication</button>
                    <button type="submit" class="btn btn-danger" name="division">Division</button>
                </div>
                <div class="text-center">
                    <h2 class="text-white p-5">Result:
                        <input class="text-center" type="text" value="
                        <?php foreach ($result as $value) echo "$value "; ?>">
                    </h2>
                </div>
            </form>
        </div>
    </div>

    <br> <br> <br> <br>
</section>