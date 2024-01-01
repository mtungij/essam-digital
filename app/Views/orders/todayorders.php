<?= $this->extend('main') ;?>

<?= $this->section('content') ;?>



<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Customer name
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone Number
                </th>
                <th scope="col" class="px-6 py-3">
                    Order Type
                </th>
                <th scope="col" class="px-6 py-3">
                    work Budget
                </th>

                <th>
                    Employee
                </th>
                <th>
                   Action Date
                </th>
               
            </tr>
        </thead>
        <tbody>
            <?php foreach($orders as $value):?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                     <?= $value->customer ?>
                </th>
            <td class="px-6 py-4">
                <?= $value->phone ?>
            </td>
            <td class="px-6 py-4">
                <?= $value->order_type ?>
            </td>
            <td class="px-6 py-4">
                <?= $value->budget ?>
            </td>
            <td class="px-6 py-4">
            <?= $value->username ?>
            </td>
            <td class="px-6 py-4">
                 <?= $value->created_at ?>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>



<?= $this->endSection() ;?>