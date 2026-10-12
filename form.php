<!-- Devon Hornsby -->
<form action="index.php" method="post" class="mt-4">

    <div class="row justify-content-center mb-3">

        <div class="col-md-4">
            <label for="returnDate" class="form-label">Return Date</label>
            <input
                type="date"
                name="returnDate"
                id="returnDate"
                class="form-control">
        </div>

        <div class="col-md-4">
            <label for="dueDate" class="form-label">Due Date</label>
            <input
                type="date"
                name="dueDate"
                id="dueDate"
                class="form-control">
        </div>

    </div>

    <div class="text-center">
        <input
            type="submit"
            value="Calculate Date"
            class="btn btn-primary">
    </div>

</form>