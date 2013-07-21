    <table border="1" style="width:200px">
        <thead>
            <tr>
                <th>item</th><th>price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $this->item[$inner] ?></td><td><?php echo money_format('%i', $this->price[$inner]) ?></td>
            </tr>
        </tbody>
    </table>