<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pku".
 *
 * @property int $id
 * @property string $nama
 * @property string $tgl
 * @property string $daerah
 * @property int $j_utusan
 * @property string $utusan
 * @property int $quran
 * @property int $arab
 * @property int $inggris
 * @property int $wawasan
 * @property int $s2
 * @property int $nilai
 * @property float|null $hasil
 */
class Pku extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pku';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'tgl', 'daerah', 'j_utusan', 'utusan', 'quran', 'arab', 'inggris', 'wawasan', 's2', 'nilai'], 'required'],
            [['tgl'], 'safe'],
            [['j_utusan', 'quran', 'arab', 'inggris', 'wawasan', 's2', 'nilai', 'hasil'], 'integer'],
            [['nama', 'daerah', 'utusan'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'tgl' => 'Tanggal Lahir',
            'daerah' => 'Daerah',
            'j_utusan' => 'Jenis Utusan',
            'utusan' => 'Utusan',
            'quran' => 'Quran',
            'arab' => 'Arab',
            'inggris' => 'Inggris',
            'wawasan' => 'Wawasan',
            's2' => 'S2',
            'nilai' => 'Nilai',
            'hasil' => 'Hasil',
        ];
    }
}
