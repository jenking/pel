<?php

/*  PEL: PHP Exif Library.  A library with support for reading and
 *  writing all Exif headers in JPEG and TIFF images using PHP.
 *
 *  Copyright (C) 2005  Martin Geisler.
 *
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program in the file COPYING; if not, write to the
 *  Free Software Foundation, Inc., 51 Franklin St, Fifth Floor,
 *  Boston, MA 02110-1301 USA
 */

/* $Id$ */

/* Autogenerated by the make-image-test.php script */


class canon_powershot_s60 extends UnitTestCase {

  function __construct() {
    require_once('../PelJpeg.php');
    parent::__construct('PEL canon-powershot-s60.jpg Tests');
  }

  function testRead() {
    Pel::clearExceptions();
    Pel::setStrictParsing(false);
    $jpeg = new PelJpeg();
    $jpeg->loadFile(dirname(__FILE__) . '/canon-powershot-s60.jpg');

    $app1 = $jpeg->getSection(PelJpegMarker::APP1);
    $this->assertIsA($app1, 'PelExif');
    
    $tiff = $app1->getTiff();
    $this->assertIsA($tiff, 'PelTiff');
    
    /* The first IFD. */
    $ifd0 = $tiff->getIfd();
    $this->assertIsA($ifd0, 'PelIfd');
    
    /* Start of IDF $ifd0. */
    $this->assertEqual(count($ifd0->getEntries()), 8);
    
    $entry = $ifd0->getEntry(271); // Make
    $this->assertIsA($entry, 'PelEntryAscii');
    $this->assertEqual($entry->getValue(), 'Canon');
    $this->assertEqual($entry->getText(), 'Canon');
    
    $entry = $ifd0->getEntry(272); // Model
    $this->assertIsA($entry, 'PelEntryAscii');
    $this->assertEqual($entry->getValue(), 'Canon PowerShot S60');
    $this->assertEqual($entry->getText(), 'Canon PowerShot S60');
    
    $entry = $ifd0->getEntry(274); // Orientation
    $this->assertIsA($entry, 'PelEntryShort');
    $this->assertEqual($entry->getValue(), 1);
    $this->assertEqual($entry->getText(), 'top - left');
    
    $entry = $ifd0->getEntry(282); // XResolution
    $this->assertIsA($entry, 'PelEntryRational');
    $this->assertEqual($entry->getValue(), array (
  0 => 180,
  1 => 1,
));
    $this->assertEqual($entry->getText(), '180/1');
    
    $entry = $ifd0->getEntry(283); // YResolution
    $this->assertIsA($entry, 'PelEntryRational');
    $this->assertEqual($entry->getValue(), array (
  0 => 180,
  1 => 1,
));
    $this->assertEqual($entry->getText(), '180/1');
    
    $entry = $ifd0->getEntry(296); // ResolutionUnit
    $this->assertIsA($entry, 'PelEntryShort');
    $this->assertEqual($entry->getValue(), 2);
    $this->assertEqual($entry->getText(), 'Inch');
    
    $entry = $ifd0->getEntry(306); // DateTime
    $this->assertIsA($entry, 'PelEntryTime');
    $this->assertEqual($entry->getValue(), 1097316018);
    $this->assertEqual($entry->getText(), '2004:10:09 10:00:18');
    
    $entry = $ifd0->getEntry(531); // YCbCrPositioning
    $this->assertIsA($entry, 'PelEntryShort');
    $this->assertEqual($entry->getValue(), 1);
    $this->assertEqual($entry->getText(), 'centered');
    
    /* Sub IFDs of $ifd0. */
    $this->assertEqual(count($ifd0->getSubIfds()), 1);
    $ifd0_0 = $ifd0->getSubIfd(2); // IFD Exif
    $this->assertIsA($ifd0_0, 'PelIfd');
    
    /* Start of IDF $ifd0_0. */
    $this->assertEqual(count($ifd0_0->getEntries()), 30);
    
    $entry = $ifd0_0->getEntry(33434); // ExposureTime
    $this->assertIsA($entry, 'PelEntryRational');
    $this->assertEqual($entry->getValue(), array (
  0 => 1,
  1 => 8,
));
    $this->assertEqual($entry->getText(), '1/8 sec.');
    
    $entry = $ifd0_0->getEntry(33437); // FNumber
    $this->assertIsA($entry, 'PelEntryRational');
    $this->assertEqual($entry->getValue(), array (
  0 => 53,
  1 => 10,
));
    $this->assertEqual($entry->getText(), 'f/5.3');
    
    $entry = $ifd0_0->getEntry(36864); // ExifVersion
    $this->assertIsA($entry, 'PelEntryVersion');
    $this->assertEqual($entry->getValue(), 2.2);
    $this->assertEqual($entry->getText(), 'Exif Version 2.2');
    
    $entry = $ifd0_0->getEntry(36867); // DateTimeOriginal
    $this->assertIsA($entry, 'PelEntryTime');
    $this->assertEqual($entry->getValue(), 1097316018);
    $this->assertEqual($entry->getText(), '2004:10:09 10:00:18');
    
    $entry = $ifd0_0->getEntry(36868); // DateTimeDigitized
    $this->assertIsA($entry, 'PelEntryTime');
    $this->assertEqual($entry->getValue(), 1097316018);
    $this->assertEqual($entry->getText(), '2004:10:09 10:00:18');
    
    $entry = $ifd0_0->getEntry(37121); // ComponentsConfiguration
    $this->assertIsA($entry, 'PelEntryUndefined');
    $this->assertEqual($entry->getValue(), ' ');
    $this->assertEqual($entry->getText(), 'Y Cb Cr -');
    
    $entry = $ifd0_0->getEntry(37122); // CompressedBitsPerPixel
    $this->assertIsA($entry, 'PelEntryRational');
    $this->assertEqual($entry->getValue(), array (
  0 => 2,
  1 => 1,
));
    $this->assertEqual($entry->getText(), '2/1');
    
    $entry = $ifd0_0->getEntry(37377); // ShutterSpeedValue
    $this->assertIsA($entry, 'PelEntrySRational');
    $this->assertEqual($entry->getValue(), array (
  0 => 96,
  1 => 32,
));
    $this->assertEqual($entry->getText(), '96/32 sec. (APEX: 2)');
    
    $entry = $ifd0_0->getEntry(37378); // ApertureValue
    $this->assertIsA($entry, 'PelEntryRational');
    $this->assertEqual($entry->getValue(), array (
  0 => 154,
  1 => 32,
));
    $this->assertEqual($entry->getText(), 'f/5.3');
    
    $entry = $ifd0_0->getEntry(37380); // ExposureBiasValue
    $this->assertIsA($entry, 'PelEntrySRational');
    $this->assertEqual($entry->getValue(), array (
  0 => 0,
  1 => 3,
));
    $this->assertEqual($entry->getText(), '0.0');
    
    $entry = $ifd0_0->getEntry(37381); // MaxApertureValue
    $this->assertIsA($entry, 'PelEntryRational');
    $this->assertEqual($entry->getValue(), array (
  0 => 154,
  1 => 32,
));
    $this->assertEqual($entry->getText(), '154/32');
    
    $entry = $ifd0_0->getEntry(37383); // MeteringMode
    $this->assertIsA($entry, 'PelEntryShort');
    $this->assertEqual($entry->getValue(), 5);
    $this->assertEqual($entry->getText(), 'Pattern');
    
    $entry = $ifd0_0->getEntry(37385); // Flash
    $this->assertIsA($entry, 'PelEntryShort');
    $this->assertEqual($entry->getValue(), 16);
    $this->assertEqual($entry->getText(), 'Flash did not fire, compulsory flash mode.');
    
    $entry = $ifd0_0->getEntry(37386); // FocalLength
    $this->assertIsA($entry, 'PelEntryRational');
    $this->assertEqual($entry->getValue(), array (
  0 => 662,
  1 => 32,
));
    $this->assertEqual($entry->getText(), '20.7 mm');
    
    $entry = $ifd0_0->getEntry(37500); // MakerNote
    $this->assertIsA($entry, 'PelEntryUndefined');
    $this->assertEqual($entry->getValue(), '   .   �       �       �    "   �        0        <       D       |        �       �       iB 	      �         9      �       �            $   �      \\                             @  �����   � � ��          ��5  
 
        ��     �"�         D   � 6 � `                         j   � `      �                                   	 	 �� 
� �\' ,�  �,�  �,�  �������      * * *            IMG:PowerShot S60 JPEG          Firmware Version 1.00    Q                              
   ��                                                                                                                                                                                                                                                                H 	 ||}z�|�zD     X�   
 ��  
 t � %  �          *     � � II* �  ');
    $this->assertEqual($entry->getText(), '904 bytes unknown MakerNote data');
    
    $entry = $ifd0_0->getEntry(37510); // UserComment
    $this->assertIsA($entry, 'PelEntryUserComment');
    $this->assertEqual($entry->getValue(), '                                                                                                                                                                                                                                                                ');
    $this->assertEqual($entry->getText(), '                                                                                                                                                                                                                                                                ');
    
    $entry = $ifd0_0->getEntry(40960); // FlashPixVersion
    $this->assertIsA($entry, 'PelEntryVersion');
    $this->assertEqual($entry->getValue(), 1);
    $this->assertEqual($entry->getText(), 'FlashPix Version 1.0');
    
    $entry = $ifd0_0->getEntry(40961); // ColorSpace
    $this->assertIsA($entry, 'PelEntryShort');
    $this->assertEqual($entry->getValue(), 1);
    $this->assertEqual($entry->getText(), 'sRGB');
    
    $entry = $ifd0_0->getEntry(40962); // PixelXDimension
    $this->assertIsA($entry, 'PelEntryShort');
    $this->assertEqual($entry->getValue(), 640);
    $this->assertEqual($entry->getText(), '640');
    
    $entry = $ifd0_0->getEntry(40963); // PixelYDimension
    $this->assertIsA($entry, 'PelEntryShort');
    $this->assertEqual($entry->getValue(), 480);
    $this->assertEqual($entry->getText(), '480');
    
    $entry = $ifd0_0->getEntry(41486); // FocalPlaneXResolution
    $this->assertIsA($entry, 'PelEntryRational');
    $this->assertEqual($entry->getValue(), array (
  0 => 640000,
  1 => 283,
));
    $this->assertEqual($entry->getText(), '640000/283');
    
    $entry = $ifd0_0->getEntry(41487); // FocalPlaneYResolution
    $this->assertIsA($entry, 'PelEntryRational');
    $this->assertEqual($entry->getValue(), array (
  0 => 480000,
  1 => 212,
));
    $this->assertEqual($entry->getText(), '480000/212');
    
    $entry = $ifd0_0->getEntry(41488); // FocalPlaneResolutionUnit
    $this->assertIsA($entry, 'PelEntryShort');
    $this->assertEqual($entry->getValue(), 2);
    $this->assertEqual($entry->getText(), 'Inch');
    
    $entry = $ifd0_0->getEntry(41495); // SensingMethod
    $this->assertIsA($entry, 'PelEntryShort');
    $this->assertEqual($entry->getValue(), 2);
    $this->assertEqual($entry->getText(), 'One-chip color area sensor');
    
    $entry = $ifd0_0->getEntry(41728); // FileSource
    $this->assertIsA($entry, 'PelEntryUndefined');
    $this->assertEqual($entry->getValue(), '');
    $this->assertEqual($entry->getText(), 'DSC');
    
    $entry = $ifd0_0->getEntry(41985); // CustomRendered
    $this->assertIsA($entry, 'PelEntryShort');
    $this->assertEqual($entry->getValue(), 0);
    $this->assertEqual($entry->getText(), 'Normal process');
    
    $entry = $ifd0_0->getEntry(41986); // ExposureMode
    $this->assertIsA($entry, 'PelEntryShort');
    $this->assertEqual($entry->getValue(), 0);
    $this->assertEqual($entry->getText(), 'Auto exposure');
    
    $entry = $ifd0_0->getEntry(41987); // WhiteBalance
    $this->assertIsA($entry, 'PelEntryShort');
    $this->assertEqual($entry->getValue(), 0);
    $this->assertEqual($entry->getText(), 'Auto white balance');
    
    $entry = $ifd0_0->getEntry(41988); // DigitalZoomRatio
    $this->assertIsA($entry, 'PelEntryRational');
    $this->assertEqual($entry->getValue(), array (
  0 => 2592,
  1 => 2592,
));
    $this->assertEqual($entry->getText(), '2592/2592');
    
    $entry = $ifd0_0->getEntry(41990); // SceneCaptureType
    $this->assertIsA($entry, 'PelEntryShort');
    $this->assertEqual($entry->getValue(), 0);
    $this->assertEqual($entry->getText(), 'Standard');
    
    /* Sub IFDs of $ifd0_0. */
    $this->assertEqual(count($ifd0_0->getSubIfds()), 1);
    $ifd0_0_0 = $ifd0_0->getSubIfd(4); // IFD Interoperability
    $this->assertIsA($ifd0_0_0, 'PelIfd');
    
    /* Start of IDF $ifd0_0_0. */
    $this->assertEqual(count($ifd0_0_0->getEntries()), 4);
    
    $entry = $ifd0_0_0->getEntry(1); // InteroperabilityIndex
    $this->assertIsA($entry, 'PelEntryAscii');
    $this->assertEqual($entry->getValue(), 'R98');
    $this->assertEqual($entry->getText(), 'R98');
    
    $entry = $ifd0_0_0->getEntry(2); // InteroperabilityVersion
    $this->assertIsA($entry, 'PelEntryVersion');
    $this->assertEqual($entry->getValue(), 1);
    $this->assertEqual($entry->getText(), 'Interoperability Version 1.0');
    
    $entry = $ifd0_0_0->getEntry(4097); // RelatedImageWidth
    $this->assertIsA($entry, 'PelEntryShort');
    $this->assertEqual($entry->getValue(), 640);
    $this->assertEqual($entry->getText(), '640');
    
    $entry = $ifd0_0_0->getEntry(4098); // RelatedImageLength
    $this->assertIsA($entry, 'PelEntryShort');
    $this->assertEqual($entry->getValue(), 480);
    $this->assertEqual($entry->getText(), '480');
    
    /* Sub IFDs of $ifd0_0_0. */
    $this->assertEqual(count($ifd0_0_0->getSubIfds()), 0);
    
    $this->assertEqual($ifd0_0_0->getThumbnailData(), '');
    
    /* Next IFD. */
    $ifd0_0_1 = $ifd0_0_0->getNextIfd();
    $this->assertNull($ifd0_0_1);
    /* End of IFD $ifd0_0_0. */
    
    $this->assertEqual($ifd0_0->getThumbnailData(), '');
    
    /* Next IFD. */
    $ifd0_1 = $ifd0_0->getNextIfd();
    $this->assertNull($ifd0_1);
    /* End of IFD $ifd0_0. */
    
    $this->assertEqual($ifd0->getThumbnailData(), '');
    
    /* Next IFD. */
    $ifd1 = $ifd0->getNextIfd();
    $this->assertIsA($ifd1, 'PelIfd');
    /* End of IFD $ifd0. */
    
    /* Start of IDF $ifd1. */
    $this->assertEqual(count($ifd1->getEntries()), 4);
    
    $entry = $ifd1->getEntry(259); // Compression
    $this->assertIsA($entry, 'PelEntryShort');
    $this->assertEqual($entry->getValue(), 6);
    $this->assertEqual($entry->getText(), 'JPEG compression');
    
    $entry = $ifd1->getEntry(282); // XResolution
    $this->assertIsA($entry, 'PelEntryRational');
    $this->assertEqual($entry->getValue(), array (
  0 => 180,
  1 => 1,
));
    $this->assertEqual($entry->getText(), '180/1');
    
    $entry = $ifd1->getEntry(283); // YResolution
    $this->assertIsA($entry, 'PelEntryRational');
    $this->assertEqual($entry->getValue(), array (
  0 => 180,
  1 => 1,
));
    $this->assertEqual($entry->getText(), '180/1');
    
    $entry = $ifd1->getEntry(296); // ResolutionUnit
    $this->assertIsA($entry, 'PelEntryShort');
    $this->assertEqual($entry->getValue(), 2);
    $this->assertEqual($entry->getText(), 'Inch');
    
    /* Sub IFDs of $ifd1. */
    $this->assertEqual(count($ifd1->getSubIfds()), 0);
    
    $thumb_data = file_get_contents(dirname(__FILE__) .
                                    '/canon-powershot-s60-thumb.jpg');
    $this->assertEqual($ifd1->getThumbnailData(), $thumb_data);
    
    /* Next IFD. */
    $ifd2 = $ifd1->getNextIfd();
    $this->assertNull($ifd2);
    /* End of IFD $ifd1. */
    
    $this->assertTrue(count(Pel::getExceptions()) == 0);
    
  }
}

?>
