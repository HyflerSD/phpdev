<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transactions</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        table tr th, table tr td {
            padding: 5px;
            border: 1px #eee solid;
        }

        tfoot tr th, tfoot tr td {
            font-size: 20px;
        }

        tfoot tr th {
            text-align: right;
        }
    </style>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>Date</th>
        <th>Check #</th>
        <th>Description</th>
        <th>Amount</th>
    </tr>
    </thead>
    <tbody>
        <?php if (!empty($transactions)):?>
            <?php foreach($transactions as $transaction):?>
            <tr>
                <td><?= formatDate($transaction['date']) ?></td>
                <td><?= $transaction['checkNumber'] ?></td>
                <td><?= $transaction['description'] ?></td>

                <td><?php  if ($transaction['amount'] < 0):?>
                <span style="color: red">
                    <?= formatDollarAmount($transaction['amount'])?>
                </span>
                    <?php elseif ($transaction['amount']): ?>
                    <span style="color: green">
                         <?= formatDollarAmount($transaction['amount'])?>
                    </span>
                    <?php else:?>
                         <?= formatDollarAmount($transaction['amount'])?>
                    <?php endif?>
                </td>
            </tr>
            <?php endforeach ?>
        <?php endif ?>
    <tfoot>
    <tr>
        <th colspan="3">Total Income:</th>
        <td><?= formatDollarAmount($total['totalIncome']) ?? 0 ?></td>
    </tr>
    <tr>
        <th colspan="3">Total Expense:</th>
        <td><?= formatDollarAmount($total['totalExpense']) ?? 0 ?></td>
    </tr>
    <tr>
        <th colspan="3">Net Total:</th>
        <td><?= formatDollarAmount($total['netTotal']) ?? 0 ?></td>
    </tr>
    </tfoot>
    </table>
</body>
</html>