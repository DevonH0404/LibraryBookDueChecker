<!-- Devon Hornsby -->
<form action="index.php" method="post" class="mt-4">
    <div class="mb-3">
        <label for="returnDate" class="form-label">
            Return Date
        </label>
        <input
        type="date"
            name="returnDate"
            id="returnDate"
            class="form-input">
        </input>
                <label for="dueDate" class="form-label">
            Due Date
        </label>
                <input
                type = "date"
            name="dueDate"
            id="dueDate"
            class="form-input">
        </input>
    </div>

    <input
        type="submit"
        value="Calculate Date"
        class="btn btn-primary">
</form>
