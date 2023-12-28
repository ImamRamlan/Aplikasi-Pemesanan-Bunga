<?php

namespace App\Controllers;

use App\Models\M_Transaksi;
use Dompdf\Dompdf;
use Dompdf\Options;

class transaksi extends BaseController
{
    public function index()
    {
        $model = new M_Transaksi();

        $data = [
            'title' => 'Cek Pembayaran',
            'bayar' => $model->Data()
        ];
        return view('admin/transaksi', $data);
    }
    public function generatePdfByDateRange()
    {
        $awalTanggal = $this->request->getPost('start_date');
        $akhirTanggal = $this->request->getPost('end_date');

        $model = new M_Transaksi();
        $dataByDateRange = $model->getDataByDateRange($awalTanggal, $akhirTanggal);

        // Panggil fungsi untuk generate PDF
        $this->generatePdf($dataByDateRange);
    }

    protected function generatePdf($data)
    {
        // Load view content into a variable
        $html = view('transaksi/pdf_template', ['dataByDateRange' => $data]);

        // Create PDF
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'portrait');

        $dompdf->render();

        // Display PDF in the browser or save to a file
        $dompdf->stream("output.pdf", array("Attachment" => false));
    }
}
