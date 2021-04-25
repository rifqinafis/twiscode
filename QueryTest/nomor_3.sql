SELECT transaksi.*, SUM(detail_transaksi.subtotal) as total, SUM(detail_transaksi.jumlah) as jumlah_barang
FROM transaksi
INNER JOIN detail_transaksi ON transaksi.id = detail_transaksi.id_transaksi
GROUP BY transaksi.id